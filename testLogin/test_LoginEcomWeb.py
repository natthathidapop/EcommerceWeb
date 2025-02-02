from selenium import webdriver
from selenium.webdriver.common.by import By
from selenium.webdriver.support.ui import WebDriverWait
from selenium.webdriver.support import expected_conditions as EC
import time 

driver = webdriver.Chrome()
driver.maximize_window()

driver.get("http://localhost/otop_phrae_shop/home.php")
time.sleep(3)


# wait for login button, then click
login_button = WebDriverWait(driver, 10).until(EC.element_to_be_clickable((By.LINK_TEXT, "Login")))
login_button.click()
time.sleep(3)

# try logging in with the wrong password
username_input = WebDriverWait(driver, 10).until(EC.presence_of_element_located((By.ID, "username")))
password_input = WebDriverWait(driver, 10).until(EC.presence_of_element_located((By.ID, "password")))

username_input.send_keys("nattha")
password_input.send_keys("123456789")  # wrong password

sign_in_button = WebDriverWait(driver, 10).until(EC.element_to_be_clickable((By.XPATH, "//input[@type='submit' and @value='Sign In']")))
sign_in_button.click()
time.sleep(3)

# Try logging in with the correct password.
username_input = WebDriverWait(driver, 10).until(EC.presence_of_element_located((By.ID, "username")))
password_input = WebDriverWait(driver, 10).until(EC.presence_of_element_located((By.ID, "password")))

username_input.clear()
password_input.clear()
time.sleep(2)

username_input.send_keys("nattha")
password_input.send_keys("pop1234")  # correct password

# wait for sign in button and click
sign_in_button = WebDriverWait(driver, 10).until(EC.element_to_be_clickable((By.XPATH, "//input[@type='submit' and @value='Sign In']")))
sign_in_button.click()
time.sleep(5)  # wait for web load

# check login successful (Logout button must show)
logout_button = WebDriverWait(driver, 10).until(EC.presence_of_element_located((By.XPATH, "//a[contains(text(),'Logout')]")))
logout_button.click()
time.sleep(3)

#close
driver.quit()

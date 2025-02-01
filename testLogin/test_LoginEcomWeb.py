from selenium import webdriver
from selenium.webdriver.common.by import By
from selenium.webdriver.support.ui import WebDriverWait
from selenium.webdriver.support import expected_conditions as EC
import time 

# open Chrome Browser
driver = webdriver.Chrome()
driver.maximize_window()

driver.get("http://localhost/otop_phrae_shop/home.php")
time.sleep(3)

# wait for login button
login_button = WebDriverWait(driver, 10).until(EC.element_to_be_clickable((By.LINK_TEXT, "Login")))
login_button.click()
time.sleep(3)

# input username
username_input = WebDriverWait(driver, 10).until(EC.presence_of_element_located((By.ID, "username")))
username_input.send_keys("nattha")

# input password
password_input = WebDriverWait(driver, 10).until(EC.presence_of_element_located((By.ID, "password")))
password_input.send_keys("pop1234")

# Sign In
sign_in_button = WebDriverWait(driver, 10).until(EC.element_to_be_clickable((By.XPATH, "//input[@type='submit' and @value='Sign In']")))
sign_in_button.click()
time.sleep(3)


# Log out after successful login
logout_button = WebDriverWait(driver, 10).until(EC.presence_of_element_located((By.XPATH, "//a[contains(text(),'Logout')]")))
logout_button.click()

# show result for 3 seconds
time.sleep(3)

login_button = WebDriverWait(driver, 10).until(EC.presence_of_element_located((By.LINK_TEXT, "Login")))
time.sleep(3)
# close
driver.quit()

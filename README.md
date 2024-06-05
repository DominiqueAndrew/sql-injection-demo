# SQL Injection Demo

This repository demonstrates how SQL Injection attacks work and how to prevent them using prepared statements.

## Setup Instructions

1. **Clone the repository**:
   ```sh
   git clone https://github.com/your-username/sql-injection-demo.git
   cd sql-injection-demo
2.	**Create a .env file**:
    ```sh
        echo "MYSQL_ROOT_PASSWORD=root" > .env
        echo "MYSQL_DATABASE=sql_demo" >> .env
3.	**Build and start Docker containers**:
    ```sh
        docker-compose up --build
4.	**Access the application**:
    	Open your browser and go to http://localhost:8080.

## Performing SQL Injection

1. **In the username field, enter the following SQL injection command:**:
    ```sh
        admin' UNION SELECT null, username, password FROM users -- 
        (' DO NOT FORGET TO PUT A SPACE AT THE END OF THE COMMAND')
2. **In the password field, input any value (it will be ignored).**:

3. **Submit the form:**:
    Click the submit button to log in.

4. **View Results**:
    You should now see a table with all usernames and passwords from the database

## Switching Between Vulnerable and Secured Login

	•	To use the vulnerable login, ensure the form action in index.html points to login.php.
	•	To use the secured login, change the form action in index.html to point to login_secure.php.
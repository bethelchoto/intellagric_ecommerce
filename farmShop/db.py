
import pymysql

timeout = 30

# Function to execute SQL commands from a file
def execute_sql_file(filename):
    # Connect to MySQL
    try:
        connection = pymysql.connect(
            charset="utf8mb4",
            connect_timeout=timeout,
            cursorclass=pymysql.cursors.DictCursor,
            db="defaultdb",
            host="mysql-548cc42-intelli-agric.k.aivencloud.com",
            password="AVNS_x3YExxm0PiPtXoQ_oWd",
            read_timeout=timeout,
            port=15730,
            user="avnadmin",
            write_timeout=timeout,
        )
    except pymysql.Error as e:
        print(f"Error connecting to MySQL database: {e}")
        return
    
    try:
        with open(filename, 'r', encoding='utf-8') as sql_file:
            sql_queries = sql_file.read().split(';')

            with connection.cursor() as cursor:
                for query in sql_queries:
                    query = query.strip()
                    if query:
                        cursor.execute(query)
            
            connection.commit()
            print("SQL script executed successfully.")
    
    except FileNotFoundError:
        print(f"Error: SQL file '{filename}' not found.")
    
    except pymysql.Error as e:
        print(f"Error executing SQL script: {e}")
    
    finally:
        connection.close()

# Replace 'path_to_your_sql_dump_file.sql' with the path to your SQL dump file
sql_dump_file = 'intelliagric.sql'
execute_sql_file(sql_dump_file)


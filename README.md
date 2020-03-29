# SQL-Truncation
SQL-Truncation for free use, in localhhost, CTFs, to learn how its works...

For it to work, the sql mode does NOT have to be in strict mode,I've done the tests with NO_ENGINE_SUBSTITUTION mode, and it works

I have seen in many pages, while I was doing this project, that most of them used sql, instead of sqli. For example:
"mysql_query" instead of "mysqli_query" or "mysql_real_escape_string" instead of "mysqli_real_escape_string". So be careful with that. Also remember that whenever you use any sqli command, you will need to specify the connection, in my case with the variable $conexion defined in sql.php. The creation of the tables is in tables.php

Finally I hope you have a good time and appreciate it, as it is my first project, any doubt or problem I will try to solve as soon as possible



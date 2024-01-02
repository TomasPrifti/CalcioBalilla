# Project CalcioBalilla

## Deploy
In order to connect to the database, you need to configure the `env.php` file with the data necessary.<br>
Below, there is the query that has to be executed for the <strong>FIRST</strong> deploy of the project:

```sql
CREATE TABLE games (
    id INT AUTO_INCREMENT PRIMARY KEY,
    date DATE NOT NULL,
    team1_person1 VARCHAR(255) NOT NULL,
    team1_person2 VARCHAR(255) NOT NULL,
    team2_person1 VARCHAR(255) NOT NULL,
    team2_person2 VARCHAR(255) NOT NULL,
    result VARCHAR(255) NOT NULL
);
```

### Style
For the style, there is a file `src/style.scss` that has to be compiled with the following command:

```bash
sass src/style.scss build/style.css
```

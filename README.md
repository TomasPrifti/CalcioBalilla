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

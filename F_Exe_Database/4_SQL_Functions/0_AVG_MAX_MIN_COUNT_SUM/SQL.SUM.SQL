/* get all sum of id column */
USE app;
SELECT SUM(*)+1 FROM mirror_1 WHERE ID=1
SELECT SUM(id)/COUNT(id) FROM mirror_1 WHERE ID=1

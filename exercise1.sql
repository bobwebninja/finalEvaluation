SELECT articles.id, users.*
FROM articles 
JOIN users on articles.id = users.id;
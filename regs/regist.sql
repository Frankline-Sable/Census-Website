create Database regist;

CREATE TABLE `users` (
`firstname` varchar (15),    
  `lastname` varchar(15),
    `id` varchar(7),
    `username` varchar (15),
    `faculty` varchar(50) ,
    `email`  varchar(25),
  `password` varchar(50) NOT NULL);
  
 
 INSERT INTO `users`(`username`, `password`)
VALUES
(
'Admin', 'admin123'
);
 


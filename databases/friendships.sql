BEGIN;
CREATE TABLE IF NOT EXISTS `friendships` (
    friendships_id INT PRIMARY KEY AUTO_INCREMENT,
    user_id1 INT NOT NULL,
    user_id2 INT NOT NULL,
    CONSTRAINT FK_user1 FOREIGN KEY (user_id1) REFERENCES users(id),
    CONSTRAINT FK_user2 FOREIGN KEY (user_id2) REFERENCES users(id)
);
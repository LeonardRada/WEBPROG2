CREATE DATABASE IF NOT EXISTS product;

USE product;

CREATE TABLE IF NOT EXISTS items (
  id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100),
  price double(100,2),
  image VARCHAR(100)
);


-- CREATE TABLE IF NOT EXISTS vegetables (
--   id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
--   name VARCHAR(100),
--   price double(100,2),
--   image VARCHAR(100)
-- );

INSERT INTO  items (name, price, image)
VALUES
  ('Apple', 50.00, 'apple.jpg'),
  ('Banana', 70.00, 'banana.jpg'),
  ('Blueberry', 150.00, 'blueberry.jpg'),
  ('Kiwi', 100.00, 'kiwi.jpg'),
  ('Orange', 50.00, 'orange.jpg'),
  ('Peach', 75.00, 'peach.jpg'),
  ('Strawberry', 200.00, 'strawberry.jpg'),
  ('Watermelon', 100.00, 'watermelon.jpg'),
  ('Brocolli', 100.00, 'brocolli.jpg'),
  ('Cabbage', 50.00, 'cabbage.jpg'),
  ('Carrots', 30.00, 'carrots.jpg'),
  ('Eggplant', 20.00, 'eggplant.jpg'),
  ('Lettuce', 20.00, 'lettuce.jpg'),
  ('Potato', 20.00, 'potato.jpg'),
  ('Radish', 40.00, 'radish.jpg'),
  ('Tomato', 15.00, 'tomato.jpg');

  -- INSERT INTO  vegetables (name, price, image)
  -- VALUES
  --   ('Brocolli', 100.00, 'brocolli.jpg'),
  --   ('Cabbage', 50.00, 'cabbage.jpg'),
  --   ('Carrots', 30.00, 'carrots.jpg'),
  --   ('Eggplant', 20.00, 'eggplant.jpg'),
  --   ('Lettuce', 20.00, 'lettuce.jpg'),
  --   ('Potato', 20.00, 'potato.jpg'),
  --   ('Radish', 40.00, 'radish.jpg'),
  --   ('Tomato', 15.00, 'tomato.jpg');

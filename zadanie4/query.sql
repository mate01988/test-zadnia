// pisane bez testów

SELECT orders.orderId,
      (SELECT SUM(items.price) FROM items WHEHE items.orderId = orders.orderId) AS sum_order,
      (SELECT COUNT(items.quantity) FROM items WHEHE items.orderId = orders.orderId) AS count_order
FROM orders
INNER JOIN items AS i ON i.orderId = orders.orderId
WHERE i.price > 500
# Test Task for underhood.dev

# Requirements
- php 8.1
- mysql 5.7^
- 

# How to run
- Create .env file and copy content from `.env.example` and put your database config.
- Run `composer install`
- Run `php migrate.php` to create tables.
- Run `php seed.php` to fill tables.

## Result for task #1
- Run ``php .\src\App.php``

Output:
```
Date: 2020-01-01, Total Value: 63750
Date: 2020-01-02, Total Value: 73250
Date: 2020-01-03, Total Value: 41753
Date: 2020-01-04, Total Value: 239500
Date: 2020-01-05, Total Value: 181241
Date: 2020-01-06, Total Value: 181241
Date: 2020-01-07, Total Value: 168430
Date: 2020-01-08, Total Value: 115651
Date: 2020-01-09, Total Value: 43332
Date: 2020-01-10, Total Value: 266950
```


## Task 1

Написать SQL запрос, который выведет за каждый день с 2020-01-01 по 2020-01-10 стоимость всех
   товаров на складе (таблица products).
   Например за 2020-01-01 для товара (1) получается 500*30 + для товара (2) 3000*10 + для товара (3)
   25*750 = 63750, а за 2020-01-03 - 311*33 + 970*17 + 20*750 = 41753.
```SQL
CREATE TABLE products (
   id INT NOT NULL AUTO_INCREMENT,
   date DATE,
   product_id INT NOT NULL,
   quantity INT NOT NULL,
   PRIMARY KEY (id)
   );
   INSERT INTO products
   (
   date,
   product_id,
   quantity
   )
   VALUES
   ("2020-01-01",1,500),
   ("2020-01-01",2,3000),
   ("2020-01-01",3,25),
   ("2020-01-02",1,450),
   ("2020-01-02",2,2500),
   ("2020-01-02",3,23),
   ("2020-01-03",1,311),
   ("2020-01-03",2,970),
   ("2020-01-03",3,20),
   ("2020-01-04",1,1000),
   ("2020-01-04",2,10000),
   ("2020-01-04",3,50),
   ("2020-01-05",1,632),
   ("2020-01-05",2,7868),
   ("2020-01-05",3,39),
   ("2020-01-06",1,632),
   ("2020-01-06",2,7868),
   ("2020-01-06",3,39),
   ("2020-01-07",1,737),
   ("2020-01-07",2,6999),
   ("2020-01-07",3,37),
   ("2020-01-08",1,590),
   ("2020-01-08",2,4500),
   ("2020-01-08",3,29),
   ("2020-01-09",1,311),
   ("2020-01-09",2,970),
   ("2020-01-09",3,20),
   ("2020-01-10",1,1000),
   ("2020-01-10",2,10000),
   ("2020-01-10",3,50);
   CREATE TABLE price_logs (
   id INT NOT NULL AUTO_INCREMENT,
   date DATE,
   product_id INT NOT NULL,
   price INT NOT NULL,
   PRIMARY KEY (id)
   );
   INSERT INTO price_logs
   (
   date,
   product_id,
   price
   )
   VALUES
   ("2019-12-29",1,30),
   ("2019-11-01",2,10),
   ("2019-01-01",3,750),
   ("2020-01-03",1,33),
   ("2020-01-04",1,32),
   ("2020-01-02",2,17),
   ("2020-01-09",2,20),
   ("2020-01-05",3,699);
```

## Task 2

Необходимо написать на php скрипт, который получит результат поиска с этой
страницы:
https://search.ipaustralia.gov.au/trademarks/search/advanced
Необходимо чтобы скрипт, который мы можем вызвать из консоли с передачей
параметра для поиска, запускал поиск по полю «word» например со значением: abc.
Получал результат поиска, проходил по всем страницам, сохранял данные и выводил
результат, например:
```
php Script.php abc
```

```
Results: 913
[
 1. {
 "number": "49183",
 "url_logo": "https://cdn2.search.ipaustralia.gov.au/49183/TRADE_MARK/T21069347/1.0/T21069347.MEDIUM.JPG",
 "name": "A.B.C. ABCM",
 "class": "24",
 "status": "Removed - Not renewed: Renewal fee not paid",
 "url_details_page": "https://search.ipaustralia.gov.au/trademarks/search/view/49183"
 },
 2. {
 << тут следующие подобные данные >>
 },
 << тут следующие подобные данные >>
]
```


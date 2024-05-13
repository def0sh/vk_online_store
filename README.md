# Тестовое задание VK. Архитектура интернет-магазина.






### [Ссылка](https://excalidraw.com/#json=nFFerNHIoLxeRLVW0Q4-C,wPWf8RXAVrsrz1pfb9Azqg) на System Design
![system_design](https://github.com/def0sh/vk_online_store/assets/74783488/9b4369c0-cad1-431a-8ef7-eb3a6f151709)

***
### [Ссылка](https://dbdiagram.io/d/Online_store_scheme-6640f45b9e85a46d55a1a86b) на Схему БД товаров


![schema_bd](https://github.com/def0sh/vk_online_store/assets/74783488/e404ddba-e981-4979-868c-5548ef1d901f)

### Базы данных:
Будем использовать SQL, NoSql и key-value.

- Для хранения информации о пользователях используем реляционную БД (PostgreSQL/Mysql) т.к важна структурированность и целостность.
- По условию у нас большой магазин и в нем совершенно разные товары с разнымии свойствами. Для этого лучше подойдет БД
с документоориентированной моделью данных. Используем MongoDB.
- Так же в требованиях сказано, что данные о товарах обновляются не очень часто и важен быстрый отклик на запросы к каталогу.
Для этого будем кешировать запросы с Redis.

#### Плюсы NoSql:
1. Гибкая схема данных.
2. Получение нужных товаров одним запросом. Не нужно искать и объединять таблицы, загружая тем самым ЦП.
3. Простое горизонтальное масштабирование.

#### Минусы:
1. Нет полного соответствия ACID.
2. Отсутствие строгой схемы.

#### Плюсы Redis:
1. Производительность и скорость за счет RAM -> снижение времени ожидания пользователя.
2. Уменьшение нагрузки с реляционных БД.

#### Минусы:
1. Данные лежат в оперативной памяти. Это может стать затратно по ресурсам.
---
### Хранение медиаконтента:
- Т.к медиаконтент занимает намного больше места чем текст и подгружается дольше, нужно выделить для него отдельный сервер.
Для картинок, видео и тд. будем использовать S3 хранилище в связке с CDN.

#### Плюсы CDN S3:
1. Доступ по http api.
2. Гибкое масштабирование.
3. Автоматизация процедур.
4. Не нужно закупать и обслуживать свое оборудование.

#### Минусы:
1. Зависимость от провайдера.

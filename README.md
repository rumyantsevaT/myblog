# myblog 

## В настроящее время в мире насчитывается около 500 пород собак 
_(сначала я эту цифру написала из головы, а потом залезла в википедию) :)_

-- Дамп бд в sql/myblogloc.sql

-- Можно добавлять породу, редактировать и удалять. 

-- Регистрация работает криво ..но можно зайти в кабинет и посмотреть список постов всех

```
На главной странице - список всех пород, каждый может добавить свою породу, которую он знает
```
### План разработки блога ТЗ:
 
Дамп Базы данных sql/myblogloc.sql

На сайте гости могут пройти регистрацию, а также просматривать статьи. После регистрации, авторизовавшись, пользователь может написать статью, оставить комментарий к статье.

Статьи будут разделены на категории. В каждой категории может быть множество статей. Но категория у статьи – одна. Каждый пользователь может управлять, изменять, удалять только свои статьи. Однако администратор может управлять всеми ресурсами(статьи, комментарии, категории). Соответственно будет две глобальной роли: обычный пользователь и администратор.

При переходе на site.com/admin обычный пользователь увидит уведомление: доступ запрещен, а администратор главную страницу Админки. Где есть пункты меню по управлению ресурсами. Ресурс – информационная единица в рамках проекта. К примеру, Категории, Статьи, Пользователи, Комментарии.

У статьи есть Название, Лицевая картинка, Полное содержимое и Дата создания. Также кликнув по галочке Статус, в админке, можно скрыть отображение статьи на сайте. При удалении статьи, картинка также удаляется из сервера. Чтобы картинки не заменяли друг друга. Необходимо реализовать автоматическую генерацию названия.

Категория состоит лишь из названия.

Комментарий состоит из самого Текста, Автора и Поста к которому он был написан. Удалять комментарий может только Админ. И только из Админки. Кроме написания комментария пользователем и удаления его администратором – функционала нет.
Пользователь имеет Имя, Email, Пароль. Подтверждение через почту не требуется(а для Уровня 2 требуется).

Примечания.
В проекте должна присутствовать валидация данных.
Для Уровня 1 она может быть примитивной как на WordPress. Когда ошибки показываются на белом экране, после того как форма была отправлена.
Для Уровня 2 она должна быть на основе флеш-сообщений.

В базе данных, пароли в открытом виде не хранятся. Мы храним лишь хэш пароля. Обязательно к реализации обоим уровням.

 

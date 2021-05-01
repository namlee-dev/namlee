# Dictionnaire des données

## Article

Name | Type | Properties | Description
-|-|-|-
id | int | primary key, unsigned, not null, auto_increment | article id
title | varchar (255) | not null | article title
date | varchar (255) | not null | article date (format 29 janvier 2021)
excerpt | varchar (255) | not null | article excerpt
content | text | not null | article content
category_id | int(10) | foreign key, unsigned, not null | category id of the article

## Category

Name | Type | Properties | Description
-|-|-|-
id | int | primary key, unsigned, not null, auto_increment | category id
name | varchar (255) | not null | category name

## Project

Name | Type | Properties | Description
-|-|-|-
id | int | primary key, unsigned, not null, auto_increment | project id
title | varchar (255) | not null | project title
excerpt | varchar (255) | not null | project excerpt
content | text | not null | project content
image | varchar (255) | not null | name of the web site image of the project
url | varchar (255) | not null | web site url of the project

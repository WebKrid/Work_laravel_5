<?php
@Section ('table');
CREATE TABLE news
(
    title var_char(255),
    author var_char(100),
    status enum ('draft','active','blocked'),
    image varchar(255),
    description text (text),
    sources enum('site','newspaper'),
    create_at string (timestamp),
    updated_ad string (timestamp),
    id(bignt unsigned),
);

CREATE TABLE news_sources (
title varchar (100),
description text (text),
created_ad(timestamp),
updated_ad(timestamp),
id(bigint unisigned),
);

CREATE TABLE news_has_sources {
   news_sources(bignt unsigned),
   news_id(bigint unsigned),
};
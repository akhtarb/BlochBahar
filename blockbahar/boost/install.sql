-- @author matthew mcnaney <mcnaney at gmail dot com>
-- @version $id: install.sql 5782 2008-04-01 19:49:38z matt $

create table blockbahar (
id int default 0 not null ,
title varchar( 255 ),
content text not null,
file_id int not null default 0,
hide_title smallint not null default 0,
primary key ( id )
);


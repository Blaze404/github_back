use sih;
create table temp_table (  state string, district string,year int, murder int, rape int, kidnapping int , dacoity int, robbery int, riots int, arson int, dowry int, total int)
row format delimited fields terminated by ',' lines terminated by '\n'
stored as textfile;
load data local inpath 'uploads/temp' into table temp_table;
set hive.exec.dynamic.partition.mode=nonstrict;
set hive.exec.dynamic.partition=true;
set hive.exec.max.dynamic.partitions.pernode=10000;
set hive.enforce.bucketing=true;
insert into table crimedata partition(state,year) select district,murder,rape,kidnapping,dacoity,robbery,riots,arson,dowry,total,state,year from temp_table;

<?php return unserialize('a:2:{i:0;O:31:"Doctrine\\ORM\\Mapping\\ManyToMany":7:{s:12:"targetEntity";s:28:"Migol\\UserBundle\\Entity\\User";s:8:"mappedBy";N;s:10:"inversedBy";N;s:7:"cascade";N;s:5:"fetch";s:4:"LAZY";s:7:"indexBy";N;s:5:"value";N;}i:1;O:30:"Doctrine\\ORM\\Mapping\\JoinTable":5:{s:4:"name";s:6:"follow";s:6:"schema";N;s:11:"joinColumns";a:1:{i:0;O:31:"Doctrine\\ORM\\Mapping\\JoinColumn":9:{s:4:"name";s:11:"follower_id";s:9:"fieldName";N;s:20:"referencedColumnName";s:2:"id";s:6:"unique";b:0;s:8:"nullable";b:1;s:8:"onDelete";N;s:8:"onUpdate";N;s:16:"columnDefinition";N;s:5:"value";N;}}s:18:"inverseJoinColumns";a:1:{i:0;O:31:"Doctrine\\ORM\\Mapping\\JoinColumn":9:{s:4:"name";s:11:"followed_id";s:9:"fieldName";N;s:20:"referencedColumnName";s:2:"id";s:6:"unique";b:0;s:8:"nullable";b:1;s:8:"onDelete";N;s:8:"onUpdate";N;s:16:"columnDefinition";N;s:5:"value";N;}}s:5:"value";N;}}');
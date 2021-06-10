-- genesis 2 : 2
SELECT v.versestext
 FROM rehoboth.r_booknames b 
 inner join rehoboth.r_chapter c on b.bookname_pkey = c.r_booknames_bookname_pkey
 inner join rehoboth.r_verses v on c.chapter_pkey = v.r_chapter_chapter_pkey
 where b.bookname = 'Genesis'
 and c.chaptername = 'Genesis 2'
 and v.id_verses = 2;
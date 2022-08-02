https://stackoverflow.com/questions/52992310/replace-multiple-space-with-single-space-in-a-column

update abc set title = REGEXP_REPLACE(title, ' \+', ' ');

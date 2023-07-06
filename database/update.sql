UPDATE Articles
SET
    Startdate = :start,
    Enddate = :end,
    Text = :text,
    Importance = :importance,
    Title = :title,
    Author_ID = :author_ID
WHERE
     ID = :id


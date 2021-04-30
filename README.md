# Vento

A dynamic API builder for all purposes.

## TODO list:

1. Define a data source: DB (SQL: MySQL, MSSQL... NON-SQL: MongoDB... ), Cloud base (BigQuery, AWS...), file (JSON, XML, CSV), 
2. Set up credentials: salt, API key, and secret key
3. Set up permission levels: binary format
4. Set up verbs/actions: HTTP methods

| Verb	| CRUD	| Entire Collection (e.g. /customers)	| Specific Item (e.g. /customers/{id}) |
------------- | --- | --- | --- |
| POST	| Create	| 201 (Created), 'Location' header with link to /customers/{id} containing new ID.	| 404 (Not Found), 409 (Conflict) if resource already exists.. |
| GET	| Read	| 200 (OK), list of customers. Use pagination, sorting and filtering to navigate big lists.	| 200 (OK), single customer. 404 (Not Found), if ID not found or invalid. |
| PUT	| Update/Replace	| 405 (Method Not Allowed), unless you want to update/replace every resource in the entire collection.	| 200 (OK) or 204 (No Content). 404 (Not Found), if ID not found or invalid. |
| PATCH	| Update/Modify	| 405 (Method Not Allowed), unless you want to modify the collection itself.	| 200 (OK) or 204 (No Content). 404 (Not Found), if ID not found or invalid. |
| DELETE	| Delete	| 405 (Method Not Allowed), unless you want to delete the whole collection—not often desirable.	| 200 (OK). 404 (Not Found), if ID not found or invalid. |

5. Distribuited: Share status with Memcache, Redis or Beanstalk 

# LAMP development stack 

LAMP stack running in docker containers.

## Instructions

```
docker-compose up
```

Open http://localhost

**mysql-workbench** available at http://localhost:3000

## Troubleshooting

Make sure nothing else is using ports `80`, `3306` and `3000`.

You might need to change the port for php service in `docker-compose.yml` to:
```
    ports:
      - 8080:80
```

## TODO

- [ ] debug php
- [ ] customize php and apache config
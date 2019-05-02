# PHP e MySQL II: Cookies, sessões e mais recursos

## Aula 10 : Envio de email via SMTP

1. &#9745; Vídeo 1
1. &#9745; Envio de email via SMTP
1. &#9745; Enviando email
1. &#9745; Enviando o email

## Resumo:

- Utilizando biblioteca PHPMailer (instalação via composer).
- Servidor local de SMTP: mailhog (docker)

### Executando o servidor de email SMTP docker mailhog

```bash
docker run --detach\
 --name=mailhog\
 --publish=127.0.0.1:8025:8025\
 --publish=127.0.0.1:1025:1025\
 --restart=unless-stopped\
 mailhog/mailhog
 ```
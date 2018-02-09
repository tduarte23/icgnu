# ICGNU

...

![arquitetura](assets/arquitetura.png)

## Instalação

## Interface

## Serviços

- [Compartilhar Recurso](#compartilhar-recurso)

### Compartilhar Recurso

Esse serviço tem a finalidade...

```
GET /api/smb.php?action=create-share&path=:path&comment=:comment&writeable=:writeable&browseable=:browseable&users=:users
```

Param

| Name | Tipo | Descrição |
|-|-|-|
| :path | String | Caminho de recurso no formato de URL |
| :comment | String | ... |
| :writeable | String | ... |
| :browseable | String | ... |
| :users | String | ... |

Exemplo

```
/api/smb.php?action=create-share&path=/home/public&comment=pasta+pública+...&writeable=yes&browseable=yes&users=convidado
```

Em caso de suc...

```js
{
  "status": "Pasta compartilhada com sucesso."
}
```

Em caso de er...

```js
{
  "status": "tarefa adicionada com sucesso."
}
```

Para executar tal ação é necessário executar o comando:

```
$ cat <<EOF >> /etc/samba/smb.conf
[public]
  path = /home/public
  comment = pasta pública ...
  writeable = yes
  browseable = yes
  valid users = convidado
EOF
sudo service smbd restart
sudo service nmbd restart
```

Para validar abra o arquivo `/etc/samba/smb.conf` e verifique se a linha foi adicionada, ou use o `smb-client` para verificar se a pasta está realmente compartilhada.

###

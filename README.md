# ICGNU

  Esta ferramenta permite a fácil configuração e navegação do SAMBA atravez de opções que destacam as funcionalidades da aplicação.

![arquitetura](assets/logo.png)

## Instalação

  $apt get samba

## Interface

<b>Pastas</b> - Nesse campo você pode navegar pelas pastas compartilhadas.

<b>Configurações</b> - Área destinada apenas para administradores. Nesta opção serão configuradas os parametros das pastas compartilhadas.

<b>Perfil</b> - Contem as informações do usuário atualmente logado.



## Serviços

- [Compartilhar Recurso](#compartilhar-recurso)

- [Configuração do Samba](#configuracao)

- [Exibição de Diretorios](#diretorios)

### Compartilhar Recurso

Esse serviço tem a finalidade...

```
GET /api/smb.php?action=create-share&path=:path&comment=:comment&writeable=:writeable&browseable=:browseable&users=:users
```

Param

| Name | Tipo | Descrição |
|-|-|-|
| :path | String | Caminho de recurso no formato de URL |
| :comment | String | Comentarios a respeito da pasta compartilhada |
| :writeable | String | Torna a pasta editavel |
| :browseable | String | Usuários podem navegar dentro das pastas |
| :users | String | Informa os usuários que tem permissão para acessar as pastas |

Exemplo

```
/api/smb.php?action=create-share&path=/home/public&comment=pasta+pública+...&writeable=yes&browseable=yes&users=convidado
```

Em caso de sucesso

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

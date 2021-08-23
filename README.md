## Desafio Devops 

#### O objetivo desse desafio é criar uma infraestrutura usando Docker provendo um servidor Web/PHP e um servidor MySQL.

### Instruções necessárias para execução do projeto:

#### 1.1 Acesse a página abaixo e faça login:

https://labs.play-with-docker.com/

#### 1.2 Abra uma nova instância :

+ ADD NEW INSTANCE

#### 1.3 Faça o clone esse repositório:
```
git clone https://github.com/lima-anderson/teste-docker.git
```
#### 1.4. Entre na pasta:
```
cd teste-docker
```
#### 1.5. Altere a permissão do script:
```
chmod a+x init.sh
```
#### 1.6. Rode o script (Esse passo é necessário porque o alpine não tem docker compose e apresenta algumas dificuldades para instalação):
```
./init.sh
```
#### 1.7 Coloque este ambiente em funcionamento com:
```
docker-compose up -d
```
#### 1.8. Abra o navegador e acesse:

clique na porta que foi aberta: [foto]

##### Obs.:
Pode aparecer isso:
```
Warning: mysqli::__construct(): (HY000/2002): Connection refused in /var/www/html/index.php on line 8
Conexão falhou:
Connection refused
```
Se aparecer espere alguns segundos e atualize a página.


### Solução:

[Apresentação](https://www.google.com/)

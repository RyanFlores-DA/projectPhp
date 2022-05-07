PHP: 8.1.0 - Modelo MVC
MYSQL: 8.0
Composer: 2.3.5
Biblioteca: FullCalendar https://fullcalendar.io/.
Servidor: WampServer
IDE: VsCode

Esquema do Banco de Dados:
CREATE TABLE users(
	id int primary KEY auto_increment,
    login VARCHAR(20),
    pass VARCHAR(20)    
)

CREATE TABLE agenda(
  id int primary KEY auto_increment,
  title VARCHAR(20),
  description VARCHAR(50),
  start DataTime,
  end DataTime,
  status VARCHAR(20),
  user_id INT
)

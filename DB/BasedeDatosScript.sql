--Tablas
CREATE TABLE [Administrador] (
  [Id_Administrador] int IDENTITY(1,1) primary key ,
  [Nombre] varchar(100),
  [Apellido] varchar(100),
  [Cargo] varchar(100),
  [Correo] varchar(100),
  [Telefono] varchar(10),
  [Usuario] varchar(20),
  [Contrasena] varchar(255),
  [Fecha_Captura] date DEFAULT GETDATE(),
  [Fecha_Modificacion] date,
  [Usuario_Captura] int,
  [Usuario_Modificacion] int,
  [Estatus] char
);
Go


CREATE TABLE [Imagen] (
  [Id_Imagenes] int IDENTITY(1,1) primary key,
  [NombreImagen] varchar(255),
  [Ruta_Documento] varchar(255),
  [Tipo] varchar(25),
  [Fecha_Captura] date DEFAULT GETDATE(),
  [Fecha_Modificacion] date NULL,
  [Usuario_Captura] int,
  [Usuario_Modificacion] int NULL,
  [Estatus] char 
  CONSTRAINT [FK_Imagenes.Usuario_Captura]
    FOREIGN KEY ([Usuario_Captura])
      REFERENCES [Administrador]([Id_Administrador])
);
Go

CREATE TABLE [Texto] (
  [Id_texto] int IDENTITY(1,1) primary key,
  [Descripcion_texto] text,
  [FechaCaptura] date DEFAULT GETDATE() ,
  [FechaModificacion] date Default NUll,
  [UsuarioCaptura] int,
  [UsuarioModificacion] int DEFAULT NULL,
  [Estatus] char ,
  CONSTRAINT [FK_Texto.UsuarioCaptura]
    FOREIGN KEY ([UsuarioCaptura])
      REFERENCES [Administrador]([Id_Administrador])
);

CREATE TABLE [Pregunta] (
  [Id_pregunta] int IDENTITY(1,1) primary key,
  [Pregunta] varchar(255),
  [Tema] varchar(255),
  [Municipio] varchar(255),
  [Fecha_Inicio]  date,
  [Fecha_final] date,
  [Opciones] text,
  [Tipo] varchar(30),
  [Fecha_Captura]  date DEFAULT GETDATE(),
  [Fecha_Modificacion] date NULL,
  [Usuario_Captura] int,
  [Usuario_Modificacion] int NULL,
  [Estatus] char,
  CONSTRAINT [FK_Pregunta.Usuario_Captura]
    FOREIGN KEY ([Usuario_Captura])
      REFERENCES [Administrador]([Id_Administrador])
);

CREATE TABLE [Respuesta] (
  [Id_Respuesta] int IDENTITY(1,1) primary key,
  [Respuesta] varchar(255),
  [Fecha_Captura] date DEFAULT GETDATE(),
  [Municipio] varchar(255),
  [Edad] int,
  [Id_Pregunta] int,
  CONSTRAINT [FK_Respuesta.Id_Pregunta]
    FOREIGN KEY ([Id_Pregunta])
      REFERENCES [Pregunta]([Id_pregunta])
);


CREATE TABLE [Estadisticas](
 Id_Estadistica int IDENTITY(1,1) primary key,
 Tema varchar(255),
 Cantidad int
);

GO

CREATE TABLE [Publicacion] (
  [Id_Publicacion] int IDENTITY(1,1) primary key,
  [NombreDocumento] varchar(255),
  [RutaDocumento] varchar(300),
  [RutaImagen] varchar(300),
  [Año] int,
  [Tematica] varchar(80),
  [Descripcion] text,
  [Fecha_Captura] date DEFAULT GETDATE(),
  [Fecha_Modificacion] date,
  [Usuario_Captura] int,
  [Usuario_Modificacion] int,
  [Estatus] char,
  CONSTRAINT [FK_Publicacion.Usuario_Captura]
    FOREIGN KEY ([Usuario_Captura])
      REFERENCES [Administrador]([Id_Administrador])
);
Go

CREATE TABLE [Miembro Red] (
  [Id_Miembro] <type>,
  [Nombre] <type>,
  [Apellido] <type>,
  [Correo] <type>,
  [Telefono] <type>,
  [Estatus] <type>,
  [Fecha_Captura] <type>,
  [Fecha_Modificacion] <type>,
  [Usuario_Captura] <type>,
  [Usuario_Modificacion] <type>,
  CONSTRAINT [FK_Miembro Red.Usuario_Captura]
    FOREIGN KEY ([Usuario_Captura])
      REFERENCES [Administrador]([Id_Administrador])
);

CREATE TABLE [Imagenes] (
  [Id_Imagenes] <type>,
  [NombreImagen] <type>,
  [Ruta_Documento] <type>,
  [Tipo] <type>,
  [Fecha_Captura] <type>,
  [Fecha_Modificacion] <type>,
  [Usuario_Captura (pk)] <type>,
  [Usuario_Modificacion] <type>,
  [Estatus] <type>,
  CONSTRAINT [FK_Imagenes.Usuario_Captura (pk)]
    FOREIGN KEY ([Usuario_Captura (pk)])
      REFERENCES [Administrador]([Id_Administrador])
);

CREATE TABLE [ProgramaParaJuventud] (
  [Id_Programa] <type>,
  [Nombre_Programa_Social ] <type>,
  [Institucion] <type>,
  [Objetivo_del_Programa] <type>,
  [Poblacion] <type>,
  [Tipo_de_Apoyo] <type>,
  [Poblacion_Objetivo_Descripcion] <type>,
  [Reglas_de_Operacion] <type>,
  [Responsable] <type>,
  [Puesto] <type>,
  [Correo] <type>,
  [Telefono] <type>,
  [Monto_Asignado] <type>,
  [Pagina_Web] <type>,
  [Tema] <type>,
  [Fecha_Inicio] <type>,
  [Fecha_Termino] <type>,
  [Fecha_Captura] <type>,
  [Fecha_Modificacion] <type>,
  [Usuario_Captura] <type>,
  [Usuario_Modificacion] <type>,
  [Estatus] <type>,
  CONSTRAINT [FK_ProgramaParaJuventud.Usuario_Captura]
    FOREIGN KEY ([Usuario_Captura])
      REFERENCES [Administrador]([Id_Administrador])
);

CREATE TABLE [Educacion] (
  [Id_Ediucacion] <type>,
  [Instituto] <type>,
  [Licenciatura] <type>,
  [Maestria] <type>,
  [Doctorado] <type>,
  [Calle] <type>,
  [Colonia] <type>,
  [Municipio] <type>,
  [Estado] <type>,
  [Pais] <type>,
  [Fecha_Captura] <type>,
  [Fecha_Modificacion] <type>,
  [Usuario_Captura] <type>,
  [Usuario_Modificacion] <type>,
  [Estatus] <type>,
  CONSTRAINT [FK_Educacion.Usuario_Captura]
    FOREIGN KEY ([Usuario_Captura])
      REFERENCES [Administrador]([Id_Administrador])
);

CREATE TABLE [Indicador] (
  [Id_Indicador] <type>,
  [Ingreso_inferior_linea_Binestad] <type>,
  [Ingreso_inferior_de_19_a_20] <type>,
  [Poblacion_vulnerable_ingreso] <type>,
  [Promedio_indice_de_la_tendencia_laboral] <type>,
  [Ingreso_nferior_linea_Binestad_minimo] <type>,
  [Poblacion_Objetivo_Descripcion] <type>,
  [Porcentaje_pobreza_moderada] <type>,
  [Porcentaje_pobreza_extrema] <type>,
  [Estatus] <type>,
  [Fecha_Captura] <type>,
  [Fecha_Modificacion] <type>,
  [Usuario_Captura] <type>,
  [Usuario_Modificacion] <type>,
  CONSTRAINT [FK_Indicador.Usuario_Captura]
    FOREIGN KEY ([Usuario_Captura])
      REFERENCES [Administrador]([Id_Administrador])
);

CREATE TABLE [Documento] (
  [Id_Documento] <type>,
  [NombreDocumento] <type>,
  [Ruta_Documento] <type>,
  [Tipo] <type>,
  [] <type>,
  [] <type>,
  [Fecha_Captura] <type>,
  [Fecha_Modificacion] <type>,
  [Usuario_Captura (pk)] <type>,
  [Usuario_Modificacion] <type>,
  [Estatus] <type>,
  CONSTRAINT [FK_Documento.Usuario_Captura (pk)]
    FOREIGN KEY ([Usuario_Captura (pk)])
      REFERENCES [Administrador]([Id_Administrador])
);

CREATE TABLE [Empresa] (
  [Id_Empresa] <type>,
  [Empresa] <type>,
  [Oferta] <type>,
  [Calle] <type>,
  [Colonia] <type>,
  [Municipio] <type>,
  [Estado] <type>,
  [Pais] <type>,
  [Fecha_Captura] <type>,
  [Fecha_Modificacion] <type>,
  [Usuario_Captura] <type>,
  [Usuario_Modificacion] <type>,
  [Estatus] <type>,
  CONSTRAINT [FK_Empresa.Usuario_Captura]
    FOREIGN KEY ([Usuario_Captura])
      REFERENCES [Administrador]([Id_Administrador])
);
Go

Create table Organizacion(
  Id_organizacion int IDENTITY(1,1) PRIMARY KEY,
  Tipo int,
  Inicio_Fecha date,
  Nombre varchar(250),
  Contacto varchar(500),
  ImagenURL varchar(500),
  Fecha_Captura date DEFAULT GETDATE(),
  Fecha_Modificacion date,
  Usuario_Captura int,
  Usuario_Modificacion int,
  Estatus date DEFAULT null,
  Constraint FK_Organizacion_Tipo FOREIGN KEY (Tipo) REFERENCES [TipoOrganizacion](Id_TipoOrganizacion),
  Constraint FK_Organizacion_Administracion FOREIGN KEY (Usuario_Captura) REFERENCES [Administrador]([Id_Administrador])
  )

  Create table TipoOrganizacion(
  Id_TipoOrganizacion int IDENTITY(1,1) PRIMARY KEY,
  Tipo int,
  Nombre_Tipo varchar(255),
  Fecha_Captura date DEFAULT GETDATE(),
  Fecha_Modificacion date,
  Usuario_Captura int,
  Usuario_Modificacion int,
  Estatus date DEFAULT null
  )
  /*Agregar llave foranea a tipo

--Borrar tablas
 drop table Administrador
 Go
 drop table Imagen
 drop table Empresa
 drop table Documento
 drop table Indicador
 drop table Educacion
 drop table [ProgramaParaJuventud]
 drop table [MiembroRed]
 drop table [Publicacion]
 drop table [Respuesta]
 drop table [Pregunta]


create table texto(
	id int IDENTITY(1,1) primary key ,
	texto text
)

--Borrar datos
delete from texto
delete from Administrador
delete from Imagen
delete from Respuesta 

--Insert de primer usuario administrador
insert into Administrador values('Cris','Borja','Coordinadora','correo@gmail.com',4771234123,'admin',123,'2021-02-25','2021-02-25',1,2,'A')

Go


---Select
Select * FROM Imagen
select* from texto

SELECT TOP 3 [Id_Imagenes], [NombreImagen], Ruta_Documento From Imagen where Tipo ='Slider-1'order by Id_Imagenes desc
select * from Administrador where Usuario='admin'
SELECT TOP 1 [id], [texto] From texto order by id desc

 SELECT        Tema, Count(Id_Respuesta) as Cantidad
FROM            Pregunta INNER JOIN
                         Respuesta ON Pregunta.Id_pregunta = Respuesta.Id_Pregunta GROUP BY Tema

Select * FROM Pregunta Where Fecha_Inicio<='2021-10-19' AND Fecha_final>='2021-10-20'

SELECT      Pregunta.Id_pregunta, Pregunta, Tema, Respuesta.Municipio, Respuesta.Respuesta, Respuesta.Fecha_Captura, Respuesta.Id_Respuesta
FROM            Pregunta INNER JOIN
                         Respuesta ON Pregunta.Id_pregunta = Respuesta.Id_Pregunta


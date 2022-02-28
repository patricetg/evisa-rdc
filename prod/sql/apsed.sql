
/*==============================================================*/
/* Table : Personne                                                */
/*==============================================================*/
CREATE TABLE IF NOT EXISTS Personne
(
   idPers               INT NOT NULL AUTO_INCREMENT,
   nomPers              VARCHAR(25) NOT NULL,
   prenPers             VARCHAR(25) NOT NULL,
   emailPers            VARCHAR(80) NOT NULL,
   passPers             VARCHAR(255) NOT NULL,
   postePers            VARCHAR(25) NOT NULL,
   imgPers            VARCHAR(255),
   typePers             VARCHAR(15),
   signature             VARCHAR(255),
   signaturePO             VARCHAR(255),
   useSignaturePO         BOOLEAN DEFAULT 0,
   pers_createdAt       DATETIME NOT NULL,
   pers_updatedAt       DATETIME,
   pers_deletedAt       DATETIME,
   PRIMARY KEY (idPers)
)ENGINE="InnoDB";

/*==============================================================*/
/* Table : Personnel                                          */
/*==============================================================*/
CREATE TABLE IF NOT EXISTS  Personnel
(
  idPers               INT NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (idPers)
)ENGINE="InnoDB";


/*==============================================================*/
/* Table : Admin                                          */
/*==============================================================*/
CREATE TABLE IF NOT EXISTS  Admin
(
  idPers               INT NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (idPers)
)ENGINE="InnoDB";



CREATE TABLE IF NOT EXISTS Societe
(
  idSte               INT NOT NULL AUTO_INCREMENT,
  codeProtectionFichier              VARCHAR(25),
  isActive             BOOLEAN DEFAULT 1,
  logo              VARCHAR(255),
  tampon              VARCHAR(255),
  certificat              VARCHAR(255),
  PRIMARY KEY (idSte)
)ENGINE="InnoDB";

CREATE TABLE IF NOT EXISTS Moule
(
  idMoule               INT NOT NULL AUTO_INCREMENT,
  nomMoule              VARCHAR(60),
  verouillerFichier     BOOLEAN,
  signatureX    DECIMAL(23,3),
  signatureY    DECIMAL(23,3),
  logoX    DECIMAL(23,3),
  logoY    DECIMAL(23,3),
  tamponX    DECIMAL(23,3),
  tamponY    DECIMAL(23,3),
  pdfJoint              VARCHAR(255),
  excelSheetPwd              VARCHAR(60),
  m_createdAt       DATETIME NOT NULL,
  m_updatedAt       DATETIME,
  PRIMARY KEY (idMoule)
)ENGINE="InnoDB";

CREATE TABLE IF NOT EXISTS FeuilleExcel
(
  idFE               INT NOT NULL AUTO_INCREMENT,
  indiceFE              SMALLINT,
  plageFE              VARCHAR(25),
  pageFE              INT,
  orientationFE    CHAR(1),
  signerFE SMALLINT NOT NULL,
  cacheterFE SMALLINT NOT NULL,
  signatureXFE    DECIMAL(23,3),
  signatureYFE    DECIMAL(23,3),
  tamponXFE    DECIMAL(23,3),
  tamponYFE    DECIMAL(23,3),
  idMoule INT NOT NULL,
  fe_createdAt       DATETIME NOT NULL,
  fe_updatedAt       DATETIME,
  PRIMARY KEY (idFE)
)ENGINE="InnoDB";

CREATE TABLE IF NOT EXISTS PagePdf
(
  idPP               INT NOT NULL AUTO_INCREMENT,
  indicePP              SMALLINT,
  signerPP SMALLINT NOT NULL,
  cacheterPP SMALLINT NOT NULL,
  signatureXPP    DECIMAL(23,3),
  signatureYPP    DECIMAL(23,3),
  tamponXPP    DECIMAL(23,3),
  tamponYPP    DECIMAL(23,3),
  idMoule INT NOT NULL,
  pp_createdAt       DATETIME NOT NULL,
  pp_updatedAt       DATETIME,
  PRIMARY KEY (idPP)
)ENGINE="InnoDB";


CREATE TABLE IF NOT EXISTS FileQueue
(
  idFQ               INT NOT NULL AUTO_INCREMENT,
  libFQ VARCHAR(50) NOT NULL,
  typeFQ CHAR(7) NOT NULL,
  idPers INT NOT NULL,
  fq_createdAt       DATETIME NOT NULL,
  fq_updatedAt       DATETIME,
  PRIMARY KEY (idFQ)
)ENGINE="InnoDB";

CREATE TABLE IF NOT EXISTS PendingFile
(
  idPF               INT NOT NULL AUTO_INCREMENT,
  cheminPF VARCHAR(255) NOT NULL,
  idFQ INT NOT NULL,
  pf_createdAt       DATETIME NOT NULL,
  pf_updatedAt       DATETIME,
  PRIMARY KEY (idPF)
)ENGINE="InnoDB";




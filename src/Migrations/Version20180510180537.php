<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;
use Symfony\Component\DependencyInjection\Exception\EnvNotFoundException;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20180510180537 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE personal (prs_id INT AUTO_INCREMENT NOT NULL, cat_id INT NOT NULL, prs_name VARCHAR(255) NOT NULL, INDEX IDX_F18A6D84E6ADA943 (cat_id), PRIMARY KEY(prs_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE work_line (wol_id INT AUTO_INCREMENT NOT NULL, wor_id INT NOT NULL, wol_id_parent INT DEFAULT NULL, wor_label VARCHAR(255) NOT NULL, INDEX IDX_28D705CEE4B10873 (wor_id), INDEX IDX_28D705CE7D54D711 (wol_id_parent), PRIMARY KEY(wol_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE category (cat_id INT AUTO_INCREMENT NOT NULL, cat_name VARCHAR(255) NOT NULL, cat_code VARCHAR(255) NOT NULL, PRIMARY KEY(cat_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE formation (frm_id INT AUTO_INCREMENT NOT NULL, sch_id INT NOT NULL, frm_degree VARCHAR(255) NOT NULL, frm_from DATE NOT NULL, frm_to DATE DEFAULT NULL, INDEX IDX_404021BF8574109F (sch_id), PRIMARY KEY(frm_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE competence (cpt_id INT AUTO_INCREMENT NOT NULL, cat_id INT NOT NULL, cpt_name VARCHAR(255) NOT NULL, cpt_level SMALLINT DEFAULT NULL, INDEX IDX_94D4687FE6ADA943 (cat_id), PRIMARY KEY(cpt_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE school (sch_id INT AUTO_INCREMENT NOT NULL, sch_name VARCHAR(255) NOT NULL, sch_logo LONGTEXT DEFAULT NULL, PRIMARY KEY(sch_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE work (wor_id INT AUTO_INCREMENT NOT NULL, com_id INT NOT NULL, wor_from DATE NOT NULL, wor_to DATE DEFAULT NULL, wor_job_name VARCHAR(255) NOT NULL, INDEX IDX_534E6880748C0F37 (com_id), PRIMARY KEY(wor_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE company (com_id INT AUTO_INCREMENT NOT NULL, com_name VARCHAR(255) NOT NULL, com_long_name VARCHAR(255) NOT NULL, com_url VARCHAR(255) NOT NULL, com_logo LONGTEXT DEFAULT NULL, PRIMARY KEY(com_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE personal ADD CONSTRAINT FK_F18A6D84E6ADA943 FOREIGN KEY (cat_id) REFERENCES category (cat_id)');
        $this->addSql('ALTER TABLE work_line ADD CONSTRAINT FK_28D705CEE4B10873 FOREIGN KEY (wor_id) REFERENCES work (wor_id)');
        $this->addSql('ALTER TABLE work_line ADD CONSTRAINT FK_28D705CE7D54D711 FOREIGN KEY (wol_id_parent) REFERENCES work_line (wol_id)');
        $this->addSql('ALTER TABLE formation ADD CONSTRAINT FK_404021BF8574109F FOREIGN KEY (sch_id) REFERENCES school (sch_id)');
        $this->addSql('ALTER TABLE competence ADD CONSTRAINT FK_94D4687FE6ADA943 FOREIGN KEY (cat_id) REFERENCES category (cat_id)');
        $this->addSql('ALTER TABLE work ADD CONSTRAINT FK_534E6880748C0F37 FOREIGN KEY (com_id) REFERENCES company (com_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE work_line DROP FOREIGN KEY FK_28D705CE7D54D711');
        $this->addSql('ALTER TABLE personal DROP FOREIGN KEY FK_F18A6D84E6ADA943');
        $this->addSql('ALTER TABLE competence DROP FOREIGN KEY FK_94D4687FE6ADA943');
        $this->addSql('ALTER TABLE formation DROP FOREIGN KEY FK_404021BF8574109F');
        $this->addSql('ALTER TABLE work_line DROP FOREIGN KEY FK_28D705CEE4B10873');
        $this->addSql('ALTER TABLE work DROP FOREIGN KEY FK_534E6880748C0F37');
        $this->addSql('DROP TABLE personal');
        $this->addSql('DROP TABLE work_line');
        $this->addSql('DROP TABLE category');
        $this->addSql('DROP TABLE formation');
        $this->addSql('DROP TABLE competence');
        $this->addSql('DROP TABLE school');
        $this->addSql('DROP TABLE work');
        $this->addSql('DROP TABLE company');
    }


    /**
     * @param Schema $schema
     */
    public function postUp(Schema $schema)
    {
      parent::postUp($schema);

      try {
        $this->connection->executeQuery('
          INSERT INTO company (
            com_id,
            com_name,
            com_long_name,
            com_url,
            com_logo
          )
          VALUES (
            1,
            "B2LF",
            "Base de Loisir Loire Forez",
            "http://www.b2lf.com",
            null
          ), (
            2,
            "Zellweger & Locca",
            "Zellweger & Locca",
            "http://www.zellwegerlocca.ch/en",
            null  
          ), (
            3,
            "UIP",
            "Union Interparlementaire",
            "https://www.ipu.org",
            null
          ), (
            4,
            "Archipel",
            "Archipel",
            "http://www.archipelvi.fr",
            null
          ), (
            5,
            "IFRC",
            "IFRC",
            "http://www.ifrc.org/fr",
            null
          ), (
            6,
            "Alten",
            "Alten",
            "http://www.alten.fr",
            null
          ), (
            7,
            "TeleSoft",
            "TeleSoft",
            "http://www.telesoft.fr",
            null
          )
        ');
        $this->connection->executeQuery('
          INSERT INTO work (
            wor_id,
            com_id,
            wor_from,
            wor_to,
            wor_job_name
          )
          VALUES (
            1,
            1,
            "2005-07-01",
            "2011-08-31",
            "Moniteur kayak"
          ), (
            2,
            2,
            "2014-01-01",
            "2014-01-31",
            "Déménageur"
          ), (
            3,
            3,
            "2014-03-16",
            "2014-03-19",
            "Organisateur"
          ), (
            4,
            4,
            "2011-01-01",
            "2011-01-31",
            "Webmaster"
          ), (
            5,
            5,
            "2013-04-01",
            "2013-06-30",
            "Consultant Informatique"
          ), (
            6,
            6,
            "2014-06-26",
            "2017-02-13",
            "Ingénieur d\'étude et de développement"
          ), (
            7,
            7,
            "2017-02-20",
            "2017-08-31",
            "Lead Developer"
          ), (
            8,
            7,
            "2017-09-01",
            null,
            "Chef de projet / Lead Developer"
          )
        ');
        $this->connection->executeQuery('
          INSERT INTO work_line (
            wol_id,
            wor_id,
            wor_id_parent,
            wor_label
          )
          VALUES (1, 1, null, "Encadrement des participants seul ou à plusieurs"),
          VALUES (2, 1, null, "Préparation matériel"),
          VALUES (3, 1, null, "Organisation des journées"),
          VALUES (4, 1, null, "Mise en place des consignes de sécurité"),
          VALUES (5, 1, null, "Conception et évolution de jeux"),
          VALUES (6, 2, null, "Transferts organisés des dossiers sous scellés"),
          VALUES (7, 2, null, "Montage / démontage étagères"),
          VALUES (8, 3, null, "Responsable des temps de paroles de chaque délégation"),
          VALUES (9, 3, null, "Ordonner les orateurs selon une liste prédéfinie"),
          VALUES (10, 4, null, "Refonte du site web seul"),
          VALUES (11, 4, null, "Actualisation mise en page et contenu"),
          VALUES (12, 4, null, "Simplification et amélioration du code"),
          VALUES (13, 4, null, "Ajout de fonctionnalités"),
          VALUES (14, 5, null, "Développement portail interne dans une équipe de 3 personnes"),
          VALUES (15, 5, null, "Utilisation de Guide Procedure, Visual Composer et SAP"),
          VALUES (16, 5, null, "Changement des logins de connexion"),
          VALUES (17, 5, null, "Création de boutons visuels"),
          VALUES (18, 6, null, "Chez Arval MD (ex: Louveo) filiale de BNP Paribas"),
          VALUES (19, 6 , 18, "Migration de l\'application existante sous Symfony"),
          VALUES (20, 6 , 18, "Mise en place de la signature électronique via echosign"),
          VALUES (21, 6 , 18, "Élaboration d\'une interface avec ActiveSync"),
          VALUES (22, 6 , 18, "Création d\'un webservice à l\'aide de la librairie NuSOAP"),
          VALUES (23, 6 , 18, "Développement et mis à jour de nombreux modules du portail interne"),
          VALUES (24, 6 , 18, "Utilisation et évolution du framework de l\'entreprise"),
          VALUES (25, 6 , 18, "Administration des droits d\'accès aux fonctionnalités"),
          VALUES (26, 6 , 18, "Gestion et intégration des traductions"),
          VALUES (27, 7, null, "Refonte multiples de pages"),
          VALUES (28, 7, null, "Amélioration des performances générales"),
          VALUES (29, 7, null, "Ajout de fonctionnalité"),
          VALUES (30, 8, null, "Gestion de divers projets"),
          VALUES (31, 8, null, "Evolution profonde de l\'application"),
          VALUES (32, 8, null, "Mis en place de process complexe pour l\'intégration de Symfony")
        ');
        $this->connection->executeQuery('
          INSERT INTO school (
            sch_id,
            sch_name,
            sch_logo
          )
          VALUES (
            1,
            "Université de Genève",
            null
          ), (
            2,
            "Université Jean Monnet",
            null
          ), (
            3,
            "Lycée François Mauriac",
            null
          )
        ');
        $this->connection->executeQuery('
          INSERT INTO formation (
            sch_id,
            frm_degree,
            frm_from,
            frm_to
          )
          VALUES (
            1,
            "Master sciences informatique mention excellent",
            "2011-09-01",
            "2014-01-31"
          ), (
            2,
            "licence informatique",
            "2008-09-01",
            "2011-06-30"
          ), (
            3,
            "baccalaureat scientifique specialite mathematiques",
            null,
            "2008-06-30"
          )
        ');
        $this->connection->executeQuery('
          INSERT INTO category (
            cat_id,
            cat_name,
            cat_code
          )
          VALUES (
            1,
            "Langages de programmation appris en formation",
            "competence"
          ), (
            2,
            "Autres langages de programmation connus",
            "competence"
          ), (
            3,
            "Langues parlées",
            "competence"
          ), (
            4,
            "Mes qualités",
            "personal"
          ), (
            5,
            "Mes sports",
            "personal"
          ), (
            6,
            "Mes passions",
            "personal"
          )
        ');
        $this->connection->executeQuery('
          INSERT INTO competence (
            cat_id,
            cpt_name,
            cpt_level
          )
          VALUES
          (1, "C", 100),
          (1, "Java", 100),
          (1, "Perl", 100),
          (1, "Python", 100),
          (1, "Bash", 100),
          (1, "HTML", 100),
          (1, "CSS", 100),
          (1, "Javascript", 100),
          (1, "PHP", 100),
          (1, "XML", 100),
          (1, "XSLT", 100),
          (1, "DTD", 100),
          (1, "SQL", 100),
          (1, "Camel", 100),
          (1, "Prolog", 100),
          (2, "C++", 100),_
          (2, "JQuery", 100),
          (2, "Visual Composer", 100),
          (2, "Guided Procedure", 100),
          (2, "Latex", 100),
          (3, "Français (langue natale)", 100),
          (3, "Anglais (niveau scolaire)", 100),
          (3, "Espagnol (niveau scolaire)", 100)
        ');
        $this->connection->executeQuery('
          INSERT INTO personal (
            cat_id,
            prs_name
          )
          VALUES
          (4, "Bonnes capacités d\'analyse et d\'adaptation"),
          (4, "Attentif"),
          (4, "Motivé dans mes projets"),
          (4, "Dynamique et efficace"),
          (4, "Prévenant"),
          (4, "Volontaire"),
          (5, "Canoë-kayak (moniteur de kayak pendant 7 ans)"),
          (5, "Ski"),
          (5, "Vélo"),
          (5, "Course à pied"),
          (5, "Pêche"),
          (6, "Informatique (apprentissage, partage, ...)"),
          (6, "Nouvelles technologies"),
          (6, "Automobile"),
          (6, "Cuisine")
        ');
      }
      catch(\Doctrine\DBAL\DBALException $e) {
        $this->write($e->getMessage());
      }
    }
}

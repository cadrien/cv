<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20180513174421 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE formation ADD frm_url VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE formation DROP frm_url');
    }

    /**
     * @param Schema $schema
     */
    public function postUp(Schema $schema)
    {
      parent::postUp($schema);

      try {
        $this->connection->executeQuery('
            UPDATE formation
            SET frm_url = "http://www.unige.ch/sciences/fr/enseignements/formations/masters/info/"
            WHERE frm_id = 1
        ');
        $this->connection->executeQuery('
            UPDATE formation
            SET frm_url = "https://fac-sciences.univ-st-etienne.fr/fr/formations/licence-XA/sciences-technologies-sante-STS/licence-informatique-program-licence-informatique.html"
            WHERE frm_id = 2
        ');
        $this->connection->executeQuery('
            UPDATE formation
            SET frm_url = "http://www.mauriac.org/"
            WHERE frm_id = 3
        ');
      }
      catch(\Doctrine\DBAL\DBALException $e) {
        $this->write($e->getMessage());
      }
    }
}

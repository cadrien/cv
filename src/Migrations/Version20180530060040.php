<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20180530060040 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
      $this->addSql('INSERT INTO info (inf_type, inf_value) VALUES ("social_network", \'a:3:{s:4:"logo";s:6:"github";s:3:"url";s:27:"https://github.com/cadrien/";s:4:"name";s:6:"GitHub";}\')');
    }

    public function down(Schema $schema) : void
    {}
}

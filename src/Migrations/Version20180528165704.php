<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20180528165704 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
      $this->addSql('UPDATE info SET inf_value=\'a:3:{s:6:"gender";s:2:"Mr";s:9:"firstname";s:6:"Adrien";s:8:"lastname";s:9:"CHAUMARAT";}\' WHERE inf_id=1');
      $this->addSql('UPDATE info SET inf_value=\'a:2:{s:4:"date";s:10:"1989-01-10";s:4:"name";s:15:"10 janvier 1989";}\' WHERE inf_id=2');
      $this->addSql('UPDATE info SET inf_value=\'a:3:{s:4:"logo";s:8:"linkedin";s:3:"url";s:44:"https://www.linkedin.com/in/adrienchaumarat/";s:4:"name";s:8:"LinkedIn";}\' WHERE inf_id=5');
      $this->addSql('UPDATE info SET inf_value=\'a:3:{s:4:"logo";s:6:"viadeo";s:3:"url";s:49:"https://fr.viadeo.com/fr/profile/adrien.chaumarat";s:4:"name";s:6:"Viadeo";}\' WHERE inf_id=6');
      $this->addSql('UPDATE info SET inf_value=\'a:2:{s:3:"url";s:63:"https://www.google.fr/maps/place/43+Avenue+de+Paris+51100+Reims";s:4:"name";s:18:"43 Av Paris, REIMS";}\' WHERE inf_id=8');
    }

    public function down(Schema $schema) : void
    {
      $this->addSql('UPDATE info SET inf_value="M. Adrien CHAUMARAT" WHERE inf_id=1');
      $this->addSql('UPDATE info SET inf_value="1989-01-10" WHERE inf_id=2');
      $this->addSql('UPDATE info SET inf_value="https://www.linkedin.com/in/adrienchaumarat/" WHERE inf_id=5');
      $this->addSql('UPDATE info SET inf_value="https://fr.viadeo.com/fr/profile/adrien.chaumarat" WHERE inf_id=6');
      $this->addSql('UPDATE info SET inf_value="43 Av Paris, REIMS" WHERE inf_id=8');
    }
}

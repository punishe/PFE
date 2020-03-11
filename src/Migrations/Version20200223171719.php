<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200223171719 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE paradiso (id INT AUTO_INCREMENT NOT NULL, tarif VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE proporty DROP surface, DROP capacite, DROP tarif, DROP id_hotel');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE paradiso');
        $this->addSql('ALTER TABLE proporty ADD surface INT NOT NULL, ADD capacite VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, ADD tarif VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, ADD id_hotel VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci');
    }
}

<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200617074813 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE arrangement (id int(11) PK) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE hotel CHANGE id id INT AUTO_INCREMENT NOT NULL, CHANGE ville ville VARCHAR(255) NOT NULL, CHANGE description description VARCHAR(255) NOT NULL, CHANGE prix_PCstandart prix_pcstandart VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE arrangement');
        $this->addSql('ALTER TABLE hotel CHANGE id id INT NOT NULL, CHANGE ville ville TEXT NOT NULL COLLATE utf8mb4_unicode_ci, CHANGE description description TEXT NOT NULL COLLATE utf8mb4_unicode_ci, CHANGE prix_pcstandart prix_PCstandart INT NOT NULL');
    }
}

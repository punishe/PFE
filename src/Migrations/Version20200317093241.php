<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200317093241 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE chambre (id_chambre VARCHAR(20) NOT NULL COLLATE latin1_swedish_ci, capacité_chambre INT NOT NULL, prix_chambre INT NOT NULL, PRIMARY KEY(id_chambre)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = MyISAM COMMENT = \'\' ');
        $this->addSql('CREATE TABLE circuit (id_circuit VARCHAR(20) NOT NULL COLLATE latin1_swedish_ci, info_circuit VARCHAR(1000) NOT NULL COLLATE latin1_swedish_ci, date_depart_circuit DATE NOT NULL, date_retour_circuit DATE NOT NULL, prix_circuit VARCHAR(10) NOT NULL COLLATE latin1_swedish_ci, nbre_place_circuit INT NOT NULL, PRIMARY KEY(id_circuit)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = MyISAM COMMENT = \'\' ');
        $this->addSql('CREATE TABLE client (id_client INT NOT NULL, nom_client VARCHAR(25) NOT NULL COLLATE latin1_swedish_ci, prenom_client VARCHAR(25) NOT NULL COLLATE latin1_swedish_ci, ville_client VARCHAR(25) NOT NULL COLLATE latin1_swedish_ci, date_naissance_client DATE NOT NULL, tel_client VARCHAR(15) NOT NULL COLLATE latin1_swedish_ci, email_client VARCHAR(50) NOT NULL COLLATE latin1_swedish_ci, age_client INT NOT NULL, PRIMARY KEY(id_client)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = MyISAM COMMENT = \'\' ');
        $this->addSql('CREATE TABLE facture (id_facture VARCHAR(2) NOT NULL COLLATE latin1_swedish_ci, id_client VARCHAR(20) NOT NULL COLLATE latin1_swedish_ci, nom_client VARCHAR(50) NOT NULL COLLATE latin1_swedish_ci, prenom_client VARCHAR(50) NOT NULL COLLATE latin1_swedish_ci, info_facture VARCHAR(500) NOT NULL COLLATE latin1_swedish_ci, montant VARCHAR(10) NOT NULL COLLATE latin1_swedish_ci, PRIMARY KEY(id_facture)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = MyISAM COMMENT = \'\' ');
        $this->addSql('CREATE TABLE hotel (id_hotel VARCHAR(20) NOT NULL COLLATE latin1_swedish_ci, nom_hotel VARCHAR(100) NOT NULL COLLATE latin1_swedish_ci, catregorie_hotel INT NOT NULL, adresse_hotel VARCHAR(100) NOT NULL COLLATE latin1_swedish_ci, ville_hotel VARCHAR(50) NOT NULL COLLATE latin1_swedish_ci, info_hotel VARCHAR(1000) NOT NULL COLLATE latin1_swedish_ci, PRIMARY KEY(id_hotel)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = MyISAM COMMENT = \'\' ');
        $this->addSql('CREATE TABLE omra (id_omra VARCHAR(20) NOT NULL COLLATE latin1_swedish_ci, description_omra VARCHAR(1000) NOT NULL COLLATE latin1_swedish_ci, date_depart_omra DATE NOT NULL, date_arrivee_omra DATE NOT NULL, prix_omra VARCHAR(10) NOT NULL COLLATE latin1_swedish_ci, PRIMARY KEY(id_omra)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = MyISAM COMMENT = \'\' ');
        $this->addSql('CREATE TABLE seminaires_congres (id_seminaire VARCHAR(50) NOT NULL COLLATE latin1_swedish_ci, date_seminaire DATE NOT NULL, emplacement_seminaire VARCHAR(100) NOT NULL COLLATE latin1_swedish_ci, info_seminaire VARCHAR(1000) NOT NULL COLLATE latin1_swedish_ci, prix-seminaire VARCHAR(10) NOT NULL COLLATE latin1_swedish_ci, PRIMARY KEY(id_seminaire)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = MyISAM COMMENT = \'\' ');
        $this->addSql('CREATE TABLE soiree (id_soiree VARCHAR(10) NOT NULL COLLATE latin1_swedish_ci, emplacement_soiree VARCHAR(50) NOT NULL COLLATE latin1_swedish_ci, prix_soiree VARCHAR(10) NOT NULL COLLATE latin1_swedish_ci, description_soiree VARCHAR(1000) NOT NULL COLLATE latin1_swedish_ci, PRIMARY KEY(id_soiree)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = MyISAM COMMENT = \'\' ');
        $this->addSql('CREATE TABLE voyage (id_voyage VARCHAR(20) NOT NULL COLLATE latin1_swedish_ci, type_voyage VARCHAR(100) NOT NULL COLLATE latin1_swedish_ci, destination_voyage VARCHAR(100) NOT NULL COLLATE latin1_swedish_ci, date_depart_voyage DATE NOT NULL, date_retour_voyage DATE NOT NULL, prix_voyage VARCHAR(10) NOT NULL COLLATE latin1_swedish_ci, description_voyage INT NOT NULL, PRIMARY KEY(id_voyage)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = MyISAM COMMENT = \'\' ');
        $this->addSql('DROP TABLE proporty');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE hotel DROP ville, DROP description');
    }
}

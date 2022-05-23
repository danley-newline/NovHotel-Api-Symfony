<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220522210400 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE reservation_chambre (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) DEFAULT NULL, price VARCHAR(255) DEFAULT NULL, date_arrive VARCHAR(255) DEFAULT NULL, date_depart VARCHAR(255) DEFAULT NULL, adultes VARCHAR(255) DEFAULT NULL, enfants VARCHAR(255) DEFAULT NULL, reduction VARCHAR(255) DEFAULT NULL, total_price VARCHAR(255) DEFAULT NULL, moyen_paiement VARCHAR(255) DEFAULT NULL, nombre_of_night VARCHAR(255) DEFAULT NULL, lieu VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE reservation_chambre');
    }
}

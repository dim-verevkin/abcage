<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230409105509 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE neworder (id INT AUTO_INCREMENT NOT NULL, product VARCHAR(255) DEFAULT NULL, quantity INT DEFAULT NULL, cost DOUBLE PRECISION DEFAULT NULL, amount DOUBLE PRECISION DEFAULT NULL, INDEX id_product_idx (product), UNIQUE INDEX id_UNIQUE (id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE `order` (id INT AUTO_INCREMENT NOT NULL, product VARCHAR(255) DEFAULT NULL, quantity INT DEFAULT NULL, cost DOUBLE PRECISION DEFAULT NULL, amount DOUBLE PRECISION DEFAULT NULL, INDEX id_product_idx (product), UNIQUE INDEX id_UNIQUE (id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE neworder');
        $this->addSql('DROP TABLE `order`');
    }
}

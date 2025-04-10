<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250409162629 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            CREATE TABLE producto_foto (id INT AUTO_INCREMENT NOT NULL, producto_id INT NOT NULL, foto VARCHAR(100) NOT NULL, INDEX IDX_12DF370F7645698E (producto_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE producto_foto ADD CONSTRAINT FK_12DF370F7645698E FOREIGN KEY (producto_id) REFERENCES producto (id)
        SQL);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            ALTER TABLE producto_foto DROP FOREIGN KEY FK_12DF370F7645698E
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE producto_foto
        SQL);
    }
}

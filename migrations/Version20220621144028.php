<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220621144028 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE cars ADD thumbnail_id INT DEFAULT NULL, DROP image');
        $this->addSql('ALTER TABLE cars ADD CONSTRAINT FK_95C71D14FDFF2E92 FOREIGN KEY (thumbnail_id) REFERENCES image (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_95C71D14FDFF2E92 ON cars (thumbnail_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE cars DROP FOREIGN KEY FK_95C71D14FDFF2E92');
        $this->addSql('DROP INDEX UNIQ_95C71D14FDFF2E92 ON cars');
        $this->addSql('ALTER TABLE cars ADD image VARCHAR(255) DEFAULT NULL, DROP thumbnail_id');
    }
}

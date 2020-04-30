<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200417080436 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE comment DROP FOREIGN KEY FK_9474526CDAE07E97');
        $this->addSql('CREATE TABLE course_of_trading (id INT AUTO_INCREMENT NOT NULL, secname VARCHAR(255) NOT NULL, shortname VARCHAR(255) NOT NULL, latname VARCHAR(255) NOT NULL, decimals DOUBLE PRECISION NOT NULL, prevprice DOUBLE PRECISION NOT NULL, boardid VARCHAR(255) NOT NULL, secid VARCHAR(255) NOT NULL, status VARCHAR(255) NOT NULL, bid DOUBLE PRECISION NOT NULL, biddepth DOUBLE PRECISION NOT NULL, biddeptht DOUBLE PRECISION NOT NULL, numbids DOUBLE PRECISION NOT NULL, offer DOUBLE PRECISION NOT NULL, offerdepth DOUBLE PRECISION NOT NULL, offerdeptht DOUBLE PRECISION NOT NULL, numoffers DOUBLE PRECISION NOT NULL, open DOUBLE PRECISION NOT NULL, high DOUBLE PRECISION NOT NULL, low DOUBLE PRECISION NOT NULL, last DOUBLE PRECISION NOT NULL, `change` DOUBLE PRECISION NOT NULL, lastchangeprcnt DOUBLE PRECISION NOT NULL, lasttoprevprice DOUBLE PRECISION NOT NULL, qty DOUBLE PRECISION NOT NULL, time TIME NOT NULL, voltoday DOUBLE PRECISION NOT NULL, valtoday DOUBLE PRECISION NOT NULL, valtoday_usd DOUBLE PRECISION NOT NULL, tradingstatus VARCHAR(255) NOT NULL, value DOUBLE PRECISION NOT NULL, value_usd DOUBLE PRECISION NOT NULL, waprice DOUBLE PRECISION NOT NULL, waptoprevwapriceprcnt DOUBLE PRECISION NOT NULL, waptoprevwaprice DOUBLE PRECISION NOT NULL, highbid DOUBLE PRECISION NOT NULL, lowoffer DOUBLE PRECISION NOT NULL, numtrades DOUBLE PRECISION NOT NULL, priceminusprevwaprice DOUBLE PRECISION NOT NULL, closeprice DOUBLE PRECISION NOT NULL, lastbid DOUBLE PRECISION NOT NULL, lastoffer DOUBLE PRECISION NOT NULL, marketprice DOUBLE PRECISION NOT NULL, marketpricetoday DOUBLE PRECISION NOT NULL, lopenprice DOUBLE PRECISION NOT NULL, lcurrentprice DOUBLE PRECISION NOT NULL, lcloseprice DOUBLE PRECISION NOT NULL, marketprice2 DOUBLE PRECISION NOT NULL, admittedquote DOUBLE PRECISION NOT NULL, openperiodprice DOUBLE PRECISION NOT NULL, updatetime TIME NOT NULL, seqnum DOUBLE PRECISION NOT NULL, spread DOUBLE PRECISION NOT NULL, lastchange DOUBLE PRECISION NOT NULL, systime DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('DROP TABLE blog');
        $this->addSql('DROP TABLE comment');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE blog (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, author VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, blog LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, image VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, tags LONGTEXT CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, created DATETIME NOT NULL, updated DATETIME NOT NULL, slug VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE comment (id INT AUTO_INCREMENT NOT NULL, blog_id INT NOT NULL, user VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, comment LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, approved TINYINT(1) NOT NULL, created DATETIME NOT NULL, updated DATETIME NOT NULL, INDEX IDX_9474526CDAE07E97 (blog_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE comment ADD CONSTRAINT FK_9474526CDAE07E97 FOREIGN KEY (blog_id) REFERENCES blog (id) ON DELETE CASCADE');
        $this->addSql('DROP TABLE course_of_trading');
    }
}
<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200427091752 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE course_of_trading DROP decimals, DROP prevprice, DROP boardid, DROP secid, DROP status, DROP bid, DROP biddepth, DROP biddeptht, DROP numbids, DROP offer, DROP offerdepth, DROP offerdeptht, DROP numoffers, DROP open, DROP high, DROP low, DROP last, DROP `change`, DROP lastchangeprcnt, DROP qty, DROP time, DROP valtoday, DROP valtoday_usd, DROP tradingstatus, DROP value, DROP value_usd, DROP waprice, DROP waptoprevwapriceprcnt, DROP waptoprevwaprice, DROP highbid, DROP lowoffer, DROP numtrades, DROP priceminusprevwaprice, DROP closeprice, DROP lastbid, DROP marketprice, DROP marketpricetoday, DROP lopenprice, DROP lcurrentprice, DROP lcloseprice, DROP marketprice2, DROP admittedquote, DROP openperiodprice, DROP updatetime, DROP seqnum, DROP spread, DROP lastchange, CHANGE secname secname VARCHAR(255) NOT NULL, CHANGE shortname shortname VARCHAR(255) NOT NULL, CHANGE latname latname VARCHAR(255) NOT NULL, CHANGE lasttoprevprice lasttoprevprice DOUBLE PRECISION NOT NULL, CHANGE voltoday voltoday DOUBLE PRECISION NOT NULL, CHANGE lastoffer lastoffer DOUBLE PRECISION NOT NULL, CHANGE systime systime DATETIME NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE course_of_trading ADD decimals DOUBLE PRECISION DEFAULT \'NULL\', ADD prevprice DOUBLE PRECISION DEFAULT \'NULL\', ADD boardid VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, ADD secid VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, ADD status VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, ADD bid DOUBLE PRECISION DEFAULT \'NULL\', ADD biddepth DOUBLE PRECISION DEFAULT \'NULL\', ADD biddeptht DOUBLE PRECISION DEFAULT \'NULL\', ADD numbids DOUBLE PRECISION DEFAULT \'NULL\', ADD offer DOUBLE PRECISION DEFAULT \'NULL\', ADD offerdepth DOUBLE PRECISION DEFAULT \'NULL\', ADD offerdeptht DOUBLE PRECISION DEFAULT \'NULL\', ADD numoffers DOUBLE PRECISION DEFAULT \'NULL\', ADD open DOUBLE PRECISION DEFAULT \'NULL\', ADD high DOUBLE PRECISION DEFAULT \'NULL\', ADD low DOUBLE PRECISION DEFAULT \'NULL\', ADD last DOUBLE PRECISION DEFAULT \'NULL\', ADD `change` DOUBLE PRECISION DEFAULT \'NULL\', ADD lastchangeprcnt DOUBLE PRECISION DEFAULT \'NULL\', ADD qty DOUBLE PRECISION DEFAULT \'NULL\', ADD time TIME DEFAULT \'NULL\', ADD valtoday DOUBLE PRECISION DEFAULT \'NULL\', ADD valtoday_usd DOUBLE PRECISION DEFAULT \'NULL\', ADD tradingstatus VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, ADD value DOUBLE PRECISION DEFAULT \'NULL\', ADD value_usd DOUBLE PRECISION DEFAULT \'NULL\', ADD waprice DOUBLE PRECISION DEFAULT \'NULL\', ADD waptoprevwapriceprcnt DOUBLE PRECISION DEFAULT \'NULL\', ADD waptoprevwaprice DOUBLE PRECISION DEFAULT \'NULL\', ADD highbid DOUBLE PRECISION DEFAULT \'NULL\', ADD lowoffer DOUBLE PRECISION DEFAULT \'NULL\', ADD numtrades DOUBLE PRECISION DEFAULT \'NULL\', ADD priceminusprevwaprice DOUBLE PRECISION DEFAULT \'NULL\', ADD closeprice DOUBLE PRECISION DEFAULT \'NULL\', ADD lastbid DOUBLE PRECISION DEFAULT \'NULL\', ADD marketprice DOUBLE PRECISION DEFAULT \'NULL\', ADD marketpricetoday DOUBLE PRECISION DEFAULT \'NULL\', ADD lopenprice DOUBLE PRECISION DEFAULT \'NULL\', ADD lcurrentprice DOUBLE PRECISION DEFAULT \'NULL\', ADD lcloseprice DOUBLE PRECISION DEFAULT \'NULL\', ADD marketprice2 DOUBLE PRECISION DEFAULT \'NULL\', ADD admittedquote DOUBLE PRECISION DEFAULT \'NULL\', ADD openperiodprice DOUBLE PRECISION DEFAULT \'NULL\', ADD updatetime TIME DEFAULT \'NULL\', ADD seqnum DOUBLE PRECISION DEFAULT \'NULL\', ADD spread DOUBLE PRECISION DEFAULT \'NULL\', ADD lastchange DOUBLE PRECISION DEFAULT \'NULL\', CHANGE secname secname VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE shortname shortname VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE latname latname VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE lasttoprevprice lasttoprevprice DOUBLE PRECISION DEFAULT \'NULL\', CHANGE voltoday voltoday DOUBLE PRECISION DEFAULT \'NULL\', CHANGE lastoffer lastoffer DOUBLE PRECISION DEFAULT \'NULL\', CHANGE systime systime DATETIME DEFAULT \'NULL\'');
    }
}

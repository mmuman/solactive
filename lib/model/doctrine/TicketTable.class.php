<?php

/**
 * TicketTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class TicketTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object TicketTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Ticket');
    }
}
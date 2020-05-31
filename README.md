# Lorekeeper

Lorekeeper is a framework for managing deviantART-based ARPGs/closed species masterlists coded using the Laravel framework. In simple terms - you will be able to make a copy of the site, do some minor setup/enter data about your species and game, and it'll provide you with the automation to keep track of your species, players and ARPG submissions.

Demo site: [http://lorekeeper.me/](http://lorekeeper.me/)
Wiki for users: [http://lorekeeper-arpg.wikidot.com/](http://lorekeeper-arpg.wikidot.com/)
Original git repository: [https://github.com/corowne/lorekeeper](https://github.com/corowne/lorekeeper)

# Info

This fork was set up for the purpose of sharing some of the changes I made. These changes are usually merged to master, but can also be found in their own branches.

## inventory_stacks

This changes the default inventory in Lorekeeper from displaying each user_item row as a stack of 1, and instead condenses duplicate entries into stacks. This has affected Inventory, Trades, and Design Updates the most, though there could still be remnants of code that still aren't using the new system.

Once the changes are pulled, the database needs to be updated as well - this can be done with:

```
$ php artisan migrate
```

The migrations will add 2 new columns to user_items: trade_count and update_count, for tracking items held in trades and updates respectively. It will also change the default value of count in user_items to 0.

Note that existing data in the database will need to be edited such that duplicate entries (where the item_id, user_id, and data are the same) need to be combined separately.

You could just update each row's count column to reflect the total count at that point in time, leaving the duplicate entries alone. I'm unsure if it will break anything, but I don't think so.

You can also delete the duplicate rows once the count column is updated. However, this will probably require deleting the item logs associated with the affected stacks, unless you create your own workaround.

I have included some SQL that you can reference in creating a query, but it is unlikely to work out of the box. Alternatively, you can also edit the database manually. Either way, ALWAYS backup your database before making changes.

The migrations do not remove holding_type and holding_id, which are not used in this version of the inventory; these may be left in or removed on your own.
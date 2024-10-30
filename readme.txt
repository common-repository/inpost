=== InPost WooCommerce ===
Contributors: darthurinpost.co.uk
Donate link: http://inpost.co.uk
Tags: e-commerce, woo-commerce, shop, parcel, lockers, shipping
Requires at least: 3.7
Tested up to: 4.3.1
Stable tag: 1.0.9
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

InPost WooCommerce is a free plugin that allows parcel creation and label
printing for delivery to an InPost locker.

== Description ==

This shipping plugin was developed by InPost UK Ltd. for WordPress WooCommerce.
Once installed the plugin allows customers to opt for delivery of their
purchased items to an InPost locker terminal. 

When checking out, customers can specify a destination locker terminal where
their purchased items will be delivered on the next day after dispatch. Once
the item(s) have been delivered to a locker terminal, the customer will
receive an email containing a QR code as well as a mobile SMS notification
containing a PIN code. They can then go to their selected locker, scan the QR
code or enter the PIN code manually using the onscreen keyboard on the
terminal, in order to collect the parcel. At present, InPost's UK network 
comprises over 1000 locker terminals across the country.

== Installation ==

= Minimum Requirements =

* WordPress 3.8 or greater
* WooCommerce 2.1 or greater

1. Upload the folder 'inpost' to the '/wp-content/plugins/' directory.
1. Activate the plugin through the 'Plugins' menu in WordPress.
1. Set up the InPost Shipping method.
1. If you have your product weight in anything other than kilograms you
**must** convert the maximum parcel weight from kg to your unit. E.g. 20,000 if you are using grams.
1. If you wish the customer's shipment address can be overriden and an InPost
locker message is inserted into the shipment address details.
1. If you are using a Barcode printer then pick that option on the InPost
shipping method options screen.

== Frequently Asked Questions ==

= Is this a stand alone plugin? =

No, the plugin requires WooCommerce.

= What is InPost =

InPost is a company that provides customers a means of delivering a parcel to 
one of our lockers for later collection. This removes the need for the 
customer to stay in and wait for a delivery person.

= What Else Is Required =

You will need to talk to a sales representitive to get an InPost Account. This
will allow you to connect to our servers for parcel and label creation.

Please call 033 033 52024 (UK only) or contact our sales team on
ecommerce.team@inpost.co.uk

== Screenshots ==

1. This shows the new fields that the customer is asked to fill in for an
InPost parcel delivery.

== Changelog ==

= 1.0.9 - 01/12/2015 =

* New Feature - The creation of the labels for the parcels is modified. The
PDF or Epl2 labels are no longer stored on the server. Instead the user
simply clicks on a link and the label is created at that point.

The bulk actions list is modified to only allow for the creation of parcels.
The label creation is done only via the link.

= 1.0.8 - 17/11/2015 =

* Fix - The java-script makes it impossible to select the shipping address
checkbox. This is fixed.

= 1.0.7 - 13/11/2015 =

* Fix - The PDF directory name was wrong. It is corrected now. Updated the
documentation with the correct name.

= 1.0.6 - 11/11/2015 =

* Fix - Unneeded files are removed from the distribution.
* New Feature - The customer can be shown a different shipment address.
Instead of the data being copied from the billing adrress InPost Locker is
inserted into the various shipment fields.

= 1.0.5 - 02/10/2015 =

* Fix - The file extension for the Epl2 format labels was not correct. Changed
from pdf to epl2.

= 1.0.4 - 29/09/2015 =

* Fix - The code did not correctly pickup the name of the installation folder
leading to issues printing labels.
* Fix - The javascript would sometimes display the extra fields more than once
on the checkout.

= 1.0.2 - 26/06/2014 =

* New Feature - Add the ability to select the type of printer that the
customer needs to print their labels on.

= 1.0.1 - 27/05/2014 =

* Fix - The PDF creation is changed to save to a local (server) file with a 
download instead of trying to do direct PDF page.
* Fix - The includes are found correctly.

= 1.0 =

* Created the plugin

== Upgrade Notice ==

= 1.0.9 =

The label creation process is modified removing the need for a separate
directory.

= 1.0.6 =

The shipment address details can be over written with InPost.

= 1.0.5 =

The creation of the Epl2 labels was not putting in the correct file extension.

= 1.0.4 =

The Woo Commerce plugin was updated and it caused some issues with the InPost
plugin. The maximum weight for parcel and the maximum size is adjusted.

= 1.0.3 =

Added the cURL option which allows us to send / receive REST API calls using
https.

= 1.0.2 =

Added the ability to select the kind of printer that the customer has for
printing out their labels on.

= 1.0.1 =

Changed the database table to allow the saving of the filename.

= 1.0 =

Created this initial version.


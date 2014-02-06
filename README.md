#Static Assets Cache

Static asset versioning for JavaScript and CSS in Magento using cache tags.

##Facts

* version: check the `config.xml`
* extension key: Hackathon_StaticAssetsCache

##Description

Frontend assets ( JavaScript / CSS ) which aren't compiled using Magento, will have a time stamp stored against them in Cache. 

When the module is enabled the assets will be rendered with a query string containing the timestamp.

Flushing / Cleaning the cache will reset the timestamp in the query string.

##Project Proposal

*Static assets, browser caches, HTTP headers which are an utter mess, CDNs and changing designs on websites... it all adds up to create an utter mess for anyone trying to deploy major changes to UI components of a website. CLS has built a customization which we include on all of our builds to version the combined CSS/JS assets used on a site (unfortunately it's not isolated and wouldn't make a good base for this). This has proved to be a major help. No waiting on a CDN to purge itself and no wondering how many clients are still seeing an old CSS file which may no longer match the current DOM structure.*

*Extending this to reach all assets would be a stellar addition to core and benefit all merchants. Even something as simple as a timestamp stored in a cache record and then included URLs spit out to browsers would be an improvement. The trick is figuring out what method to use which works across all asset types, is compatible with origin CDN setups and is also reliable.*

##Compatibility

* Magento == 1.8.0.2

**Not tested on earlier versions of Magento yet**


##Installation Instructions


##Uninstallation

##Acknowledgements

* "INSERT NAME HERE" for proposing the project in January 2014's Magento Hackathon.


##Support

If you have any issues with this extension, open an issue on GitHub (see URL above)

##Contribution

Any contributions are highly appreciated. The best way to contribute code is to open a
[pull request on GitHub](https://help.github.com/articles/using-pull-requests).

##Developer

Ben McManus - [http://un.titled.co.uk](http://un.titled.co.uk) - 
[@bennoislost](https://twitter.com/bennoislost)

##Licence

[OSL - Open Software Licence 3.0](http://opensource.org/licenses/osl-3.0.php)

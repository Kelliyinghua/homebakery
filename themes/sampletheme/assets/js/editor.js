console.log("I'm loaded!");

wp.blocks.registerBlockStyle( 
    'core/heading', 
    {
        name: 'fancy-heading',
        label: 'Fancy Heading'
    } 
);

wp.blocks.registerBlockStyle( 
    'core/paragraph', 
    {
        name: 'fancy-paragraph',
        label: 'Fancy Paragraph'
    } 
);


wp.blocks.registerBlockStyle( 
    'core/list', 
    {
        name: 'fancy-list',
        label: 'Fancy List'
    } 
);

wp.blocks.registerBlockStyle( 
    'core/quote', 
    {
        name: 'fancy-quote',
        label: 'Fancy Quote'
    } 
);


wp.blocks.registerBlockStyle( 
    'core/code', 
    {
        name: 'fancy-code',
        label: 'Fancy Code'
    } 
);

wp.blocks.registerBlockStyle( 
    'core/preformatted', 
    {
        name: 'fancy-preformatted',
        label: 'Fancy Preformatted'
    } 
);

wp.blocks.registerBlockStyle( 
    'core/pullquote', 
    {
        name: 'fancy-pullquote',
        label: 'Fancy Pullquote'
    } 
);


wp.blocks.registerBlockStyle( 
    'core/table', 
    {
        name: 'fancy-table',
        label: 'Fancy table'
    } 
);

wp.blocks.registerBlockStyle( 
    'core/verse', 
    {
        name: 'fancy-verse',
        label: 'Fancy Verse'
    } 
);


wp.blocks.registerBlockStyle( 
    'core/image', 
    {
        name: 'fancy-image',
        label: 'Fancy Image'
    } 
);

wp.blocks.registerBlockStyle( 
    'core/gallery', 
    {
        name: 'fancy-gallery',
        label: 'Fancy Gallery'
    } 
);

wp.blocks.registerBlockStyle( 
    'core/button', 
    {
        name: 'fancy-button',
        label: 'Fancy Button'
    } 
);

wp.blocks.registerBlockStyle( 
    'core/more', 
    {
        name: 'fancy-more',
        label: 'Fancy More'
    } 
);

wp.blocks.registerBlockStyle( 
    'core/nextpage', 
    {
        name: 'fancy-nextpage',
        label: 'Fancy Nextpage'
    } 
);


wp.blocks.registerBlockStyle( 
    'core/separator', 
    {
        name: 'fancy-separator',
        label: 'Fancy Separator'
    } 
);
wp.blocks.registerBlockStyle( 
    'core/shortcode', 
    {
        name: 'fancy-shortcode',
        label: 'Fancy shortcode'
    } 
);
wp.blocks.registerBlockStyle( 
    'core/archives', 
    {
        name: 'fancy-archives',
        label: 'Fancy Archives'
    } 
);
wp.blocks.registerBlockStyle( 
    'core/calendar', 
    {
        name: 'fancy-calendar',
        label: 'Fancy Calendar'
    } 
);






// wp.blocks.unregisterBlockStyle( 'core/quote', 'fancy-quote' );

wp.domReady( function() {
    wp.blocks.unregisterBlockStyle( 'core/quote', 'default');
    wp.blocks.unregisterBlockStyle( 'core/quote', 'large' );
    wp.blocks.unregisterBlockStyle( 'core/image', 'rounded' );
    wp.blocks.unregisterBlockStyle( 'core/social-links', 'logos-only' );

} );
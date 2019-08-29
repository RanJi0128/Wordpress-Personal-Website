/**
 * Block dependencies
 */
import './style.scss';

/**
 * Internal block libraries
 */
const { __ } = wp.i18n;
const { registerBlockType } = wp.blocks;
const { TextControl, Button } = wp.components;
const { Component } = wp.element;

/**
 * RevSlider Editor Element
 */
export  class RevSlider extends Component {

    constructor() {
        super( ...arguments );
        const { attributes: { text,sliderTitle } } = this.props;
        this.state = {
          text ,
          sliderTitle
        }
    }

    render() {
        const {
        attributes: { text,sliderTitle },
        setAttributes  } = this.props;
      
        window.revslider_react = this;
        const openDialog = () => {
          jQuery('#revslider-tiny-mce-dialog').dialog({
            id       : 'revslider-tiny-mce-dialog',
            width    : 900,
            height   : 600,
            resizable: false
          })
        }
        return (
          <div className="revslider_block">
                  <span>{this.state.sliderTitle}&nbsp;</span>
                  <TextControl
                        className="slider_slug"
                        value={ this.state.text }
                        onChange={ ( text ) => setAttributes( { text } ) }
                  />
                  <Button 
                        isDefault
                        onClick = { openDialog } 
                        className="slider_edit_button"
                  >
                      Edit
                  </Button>
          </div>
        )
    }
}


/**
 * Register block
 */
export default registerBlockType(
    'themepunch/revslider',
    {
        title: __( 'Slider Revolution', 'revslider' ),
        description: __( 'Add your Slider Revolution.', 'revslider' ),
        category: 'themepunch',
        icon: {
          src:  'update',
          background: 'rgb(210,0,0)',
          color: 'white',
          viewbox: "0 0 24 24"
        },        
        keywords: [
            __( 'Banner', 'revslider' ),
            __( 'CTA', 'revslider' ),
            __( 'Slider', 'revslider' ),
        ],
        attributes: {
          text: {
              selector: '.revslider',
              type: 'string',
              source: 'text',
          },
          sliderTitle: {
              selector: '.revslider',
              type: 'string',
              source: 'attribute',
             	attribute: 'data-slidertitle',
          }
        },
        edit: props => {
          const { setAttributes } = props;
          return (
            <div>
              <RevSlider {...{ setAttributes, ...props }} />
            </div>
          );
        },
        save: props => {
          const { attributes: { text,sliderTitle } } = props;
          return (
            <div className="revslider" data-slidertitle={sliderTitle}>
               {text} 
            </div>
          );
        },
    },
);
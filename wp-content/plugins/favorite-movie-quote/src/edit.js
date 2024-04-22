/**
 * Retrieves the translation of text.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/packages/packages-i18n/
 */
import { __ } from '@wordpress/i18n';

/**
 * React hook that is used to mark the block wrapper element.
 * It provides all the necessary props like the class name.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/packages/packages-block-editor/#useblockprops
 */

import { useBlockProps, RichText, BlockControls, AlignmentToolbar } from '@wordpress/block-editor';
import { ToolbarGroup } from '@wordpress/components'

/**
 * Lets webpack process CSS, SASS or SCSS files referenced in JavaScript files.
 * Those files can contain any CSS code that gets applied to the editor.
 *
 * @see https://www.npmjs.com/package/@wordpress/scripts#using-css
 */
import './editor.scss';

/**
 * The edit function describes the structure of your block in the context of the
 * editor. This represents what the editor will render when the block is used.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-edit-save/#edit
 *
 * @return {Element} Element to render.
 */
export default function Edit({ className, attributes: attr, setAttributes }) {
	const onChangeContent = (newContent) => {
		setAttributes({ content: newContent });
	};

	const onChangeAlignment = (newAlignment) => {
		setAttributes({
			alignment: newAlignment === undefined ? 'none' : newAlignment,
		});
	};
	return (
		<div {...useBlockProps()}>
			<BlockControls>
				<ToolbarGroup>
					<AlignmentToolbar
						value={attr.alignment}
						onChange={onChangeAlignment}
					/>
				</ToolbarGroup>
			</BlockControls>

			<RichText
				tagName="p"
				placeholder={__('Enter your favorite movie quotes...', 'favorite-movie-quote')}
				onChange={onChangeContent}
				value={attr.content}
			/>
		</div>
	);
}

import { store, getContext } from '@wordpress/interactivity';

function calculate(context) {
    context.c = context.a + context.b;
}

store('create-block/my-first-interactive-block', {
    actions: {
        a: (event) => {
            const context = getContext();
            context.a = parseInt(event.target.value, 10) || 0;
            calculate(context);
        },
        b: (event) => {
            const context = getContext();
            context.b = parseInt(event.target.value, 10) || 0;
            calculate(context);
        }
    }
});

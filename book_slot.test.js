const { generateText } = require('./book_slot');

test('should change the color from green to red', () => {
    const text = generateText('Max', 29);
    expect(text).toBe('Max (29 years old)');
});